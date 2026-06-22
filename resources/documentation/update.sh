#!/usr/bin/bash

# Script which should be run from the website documentation root directory
# to generate project documentation and copy it to that location so that it
# can be readily placed on the web site.

# This takes a single argument: the path to the directory containing all the
# source code packages of the projects. Default is $HOME/gnustep-gcc/build.

# All the packages we want to have documented must be installed into the
# SYSTEM domain and we must tell autogsdoc to ignore LOCAL domain and other
# non-system projects when generating cross references.

# We need to install everything into one domain so that there is a
# common root from which to calculate relative paths.
export GNUSTEP_INSTALLATION_DOMAIN=SYSTEM

# We don't want to include any external projects because links to those
# would generate dead links on the website.
export AGSDOC_LOCAL_PROJECTS=None
export AGSDOC_PROJECTS="{}"

# Record the root of the website.
GSWEBSITEDEV=`pwd`

if test $# -gt 0
then
  BUILDDIR=$1
else
  BUILDDIR=$HOME/gnustep-gcc/build
fi

if test $# -gt 1
then
  PAR=$2
else
  PAR=1
fi

if [ ! -d $BUILDDIR ]; then
  echo "Build directory does not exist: $BUILDDIR"
  exit 1
fi
cd $BUILDDIR
BUILDDIR=`pwd`

# Now we build all the documentation for projects we want, in a sensible order.
# Any failure should cause termination of this script.

set -e

PROJECTS="tools-make libs-base libs-gui libs-back libs-renaissance libs-performance libs-steptalk libs-gdl2 libs-gsweb"

for i in $PROJECTS
do
  cd $i
  git pull
  make -j install
  cd $BUILDDIR
done

build() {
  echo "#### Pass one with $1."
  if [ $iteration = 1 ]
  then
    echo "#### Pass one cleanup in" `pwd`
    make $1 uninstall
    make $1 clean
    echo "#### Pass one pull changes in" `pwd`
    git pull
    echo "#### Pass one build indexes in" `pwd`
    AGSDOC_INDEXING=yes make -j$PAR $1 messages=yes install
  else
    echo "#### Pass two build html in" `pwd`
    AGSDOC_INDEXING=no make -j$PAR $1 messages=yes install
  fi
}

for iteration in 1 2
do

  if [ $iteration = 1 ]
  then

    # gnustep-make is a special case of coourse
    if [ ! -d tools-make/Documentation ]; then
      echo "Build directory does not exist: $BUILDDIR/tools-make/Documentation"
      exit 1
    fi
    cd tools-make/Documentation
    make clean
    make install
    cd $BUILDDIR

    export AGSDOC_RELOCATABLE=no
    echo "######### Starting pass One ########"
  else
    export AGSDOC_RELOCATABLE=yes
    echo "######### Starting pass Two ########"
  fi

  if [ ! -d libs-base ]; then
    echo "Build directory does not exist: $BUILDDIR/libs-base"
    exit 1
  fi
  cd libs-base
  cd Documentation
  build
  cd $BUILDDIR

  if [ ! -d libs-gui ]; then
    echo "Build directory does not exist: $BUILDDIR/libs-gui"
    exit 1
  fi
  cd libs-gui
  cd Documentation
  build
  cd $BUILDDIR

  if [ ! -d libs-back ]; then
    echo "Build directory does not exist: $BUILDDIR/libs-back"
    exit 1
  fi
  cd libs-back
  cd Documentation
  build
  cd $BUILDDIR

  if [ ! -d libs-renaissance ]; then
    echo "Build directory does not exist: $BUILDDIR/libs-renaissance"
    exit 1
  fi
  cd libs-renaissance
  build doc=only
  cd $BUILDDIR

  if [ ! -d libs-performance ]; then
    echo "Build directory does not exist: $BUILDDIR/libs-performance"
    exit 1
  fi
  cd libs-performance
  build doc=only
  cd $BUILDDIR

  if [ ! -d libs-steptalk ]; then
    echo "Build directory does not exist: $BUILDDIR/libs-steptalk"
    exit 1
  fi
  cd libs-steptalk
  build doc=yes
  cd $BUILDDIR

  if [ ! -d libs-gdl2 ]; then
    echo "Build directory does not exist: $BUILDDIR/libs-gdl2"
    exit 1
  fi
  cd libs-gdl2
  cd Documentation
  build doc=only
  cd ../EOAccess
  build doc=only
  cd ../EOControl
  build doc=only
  cd ../EOInterface
  build doc=only
  cd ../Tools
  build doc=only
  cd $BUILDDIR

  if [ ! -d libs-gsweb ]; then
    echo "Build directory does not exist: $BUILDDIR/libs-gsweb"
    exit 1
  fi
  cd libs-gsweb
  cd GSWeb
  build doc=yes
  cd ../GSWExtensions
  build doc=yes
  cd $BUILDDIR
done


# Finally, copy the documentation from the SYSTEM domain Documentation
# directory into the corresponding website directory.

cd `gnustep-config --variable=GNUSTEP_SYSTEM_DOC`
tar --exclude='*.gsdoc' \
  --exclude='*.igsdoc' \
  --exclude='dependencies' \
  --exclude='dependencies_html' \
  --exclude='stamp' \
  --exclude='stamp_html' \
  -cf - * | (cd $GSWEBSITEDEV; tar -xvf -)

