#!/usr/bin/bash

# Script which should be run from the website documentation root directory
# to generate project documentation and copy it to that location so that it
# can be readily placed on the web site.

# This takes a single argument: the path to the directory containing all the
# source code packages of the projects. Default is $HOME/gnustep-gcc/build.

# All the packages we want to have documented must be installed into the
# SYSTEM domain and we must tell autogsdoc to ignore LOCAL domain and other
# non-system projects when generating cross references.

export GNUSTEP_INSTALLATION_DOMAIN=SYSTEM
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

build() {
  if [ $iteration = 1 ]
  then
    make uninstall
    make clean
    AGSDOC_INDEXING=yes make -j$PAR doc=yes install
  else
    AGSDOC_INDEXING=no make -j$PAR doc=yes install
  fi
}

for iteration in 1 2
do

  if [ $iteration = 2 ]
  then
    export AGSDOC_RELOCATABLE=yes
  fi

  if [ ! -d libs-base ]; then
    echo "Build directory does not exist: $BUILDDIR/libs-base"
    exit 1
  fi
  cd libs-base
  if [ $iteration = 2 ]
  then
    make install
  fi
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
  build
  cd $BUILDDIR

  if [ ! -d libs-performance ]; then
    echo "Build directory does not exist: $BUILDDIR/libs-performance"
    exit 1
  fi
  cd libs-performance
  build
  cd $BUILDDIR

  if [ ! -d libs-steptalk ]; then
    echo "Build directory does not exist: $BUILDDIR/libs-steptalk"
    exit 1
  fi
  cd libs-steptalk
  build
  cd $BUILDDIR

  if [ ! -d libs-gdl2 ]; then
    echo "Build directory does not exist: $BUILDDIR/libs-gdl2"
    exit 1
  fi
  cd libs-gdl2
  build
  cd $BUILDDIR

  if [ ! -d libs-gsweb ]; then
    echo "Build directory does not exist: $BUILDDIR/libs-gsweb"
    exit 1
  fi
  cd libs-gsweb
  build
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

