#include <stdio.h>
#include <string.h>
#include <stdlib.h>

#define GFTP "ftp://ftp.gnustep.org/pub/gnustep"

typedef struct _stable_t {
  char file[80];
  char name[80];
  char version[80];
  char location[80];
  char description[80];
  char product[80];
} stable_t;

static char *products[]={
"Prereq",
"LaunchPad",
"Core",
"Porting",
"Miscellaneous",
"All Packages",
NULL
};

static char *product_files[]={
"source_prereq.html",
"source_fun.html",
"source_core.html",
"source_port.html",
"source_misc.html",
"source_all.html",
NULL
};

static char *archs[] = {
"ppc",
"i386",
NULL
};

static char *mirrors[]={
"ftp://ftp.gnustep.org",
"ftp://archive.progeny.com/gnustep/",
"http://archive.progeny.com/gnustep/",
"rsync://archive.progeny.com/gnustep/",
"ftp://mirror.aarnet.edu.au/pub/gnustep/",
"ftp://403forbidden.net",
NULL
};

static char *prod_abbrv = "PFCVMA";
static char *tablename = "source_table.txt";

static stable_t *table;

int
read_table()
{
  int i;
  FILE *stream;
  char buffer[200];
  
  table = (stable_t *)malloc(sizeof(stable_t) * 100);

  stream = fopen(tablename, "r");
  fgets(buffer, 200, stream);
  i = 0;
  while (!feof(stream))
    {
      fgets(buffer, 200, stream);
      sscanf(buffer, "%[^\t]\t%s\t%s\t%s\t%s\t%[^\t]",
	     &table[i].name,    &table[i].version, &table[i].product, 
	     &table[i].file,  &table[i].location, &table[i].description);
      i++;
    }
  i--;
  table[i].file[0] = '\0';
  fclose(stream);
  return 0;
}
	     
int
write_table_start(FILE *stream)
{
  fprintf(stream, "<table border=\"0\" width=\"600\">\n");
  fprintf(stream, "   <tr>\n");
  fprintf(stream, "     <td width=\"104\" bgcolor=\"#000000\"><big><strong>Sources</strong></big></td>\n");
  fprintf(stream, "     <td width=\"65\" bgcolor=\"#000000\" align=\"center\"><strong><big>Version</big></strong></td>\n");
  fprintf(stream, "     <td width=\"291\" bgcolor=\"#000000\" align=\"center\"><big><strong>Notes</strong></big></td>\n");
  fprintf(stream, "   </tr>\n");
  return 0;
} 

int
write_table_end(FILE *stream)
{
  fprintf(stream, "  <tr>\n");
  fprintf(stream, "    <td width=\"194\" bgcolor=\"#000000\"></td>\n");
  fprintf(stream, "    <td width=\"65\" bgcolor=\"#000000\"></td>\n");
  fprintf(stream, "    <td width=\"191\" bgcolor=\"#000000\"></td>\n");
  fprintf(stream, "  </tr>\n");
  fprintf(stream, "</table>\n");
  return 0;
}

int
write_source(FILE *stream, stable_t entry)
{
  char location[1000];

  if (entry.location[0] == 'G')
    sprintf(location, "%s%s", GFTP, &entry.location[1]);
  else
    strcpy(location, entry.location);
  if (entry.file && strcmp(entry.file, "NONE") != 0)
    sprintf(location, "%s/%s-%s.tar.gz", location, entry.file, entry.version);
  fprintf(stream, "  <tr>\n");
  fprintf(stream, "    <td width=\"104\" bgcolor=\"#C0C0C0\">\n");
  fprintf(stream, "    <strong><big>%s</big></strong></td>\n", entry.name);
  fprintf(stream, "    <td width=\"65\" bgcolor=\"#C0C0C0\" align=\"center\">\n");
  fprintf(stream, "    <a href=\"%s\"><strong><big>%s</big></strong></a></td>\n", location, entry.version);
  fprintf(stream, "    <td width=\"291\" bgcolor=\"#C0C0C0\">%s</td>\n",
	  entry.description);
  fprintf(stream, "  </tr>\n");
  return 0;
}

int
write_srpm(FILE *stream, stable_t entry)
{
  char location[1000];
  char name[1000];

  if (entry.location[0] == 'G')
    sprintf(location, "%s/rpms/srpms", GFTP);
  else
    return 0;
  if (entry.file && strcmp(entry.file, "NONE") != 0)
    {
      sprintf(location, "%s/%s-%s-1.src.rpm", 
	      location, entry.file, entry.version);
      sprintf(name, "%s-%s-1.src.rpm", 
	      entry.file, entry.version);
      fprintf(stream, "  <li><a href=\"%s\">%s</a>\n", location, name);
    }
  return 0;
}

int
write_rpm_arch(FILE *stream, const char *arch, stable_t entry)
{
  char location[1000];
  char name[1000];

  if (entry.location[0] == 'G')
    sprintf(location, "%s/rpms/%s", GFTP, arch);
  else
    return 0;
  if (entry.file && strcmp(entry.file, "NONE") != 0)
    {
      sprintf(location, "%s/%s-%s-1.%s.rpm", 
	      location, entry.file, entry.version, arch);
      sprintf(name, "%s-%s-1.%s.rpm", 
	      entry.file, entry.version, arch);
      fprintf(stream, "  <li><a href=\"%s\">%s</a>\n", location, name);
    }
  return 0;
}

int
write_file(int i)
{
  int j, k;
  FILE *stream, *post;

  stream = fopen(product_files[i], "w");
  if (stream == NULL)
    {
      perror("Can't write htlp file:");
      return 0;
    }

  fprintf(stream, "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n");
  fprintf(stream, "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\"\n");
  fprintf(stream, "          \"DTD/xhtml1-transitional.dtd\">\n");
  fprintf(stream, "<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">\n");
  fprintf(stream, "<head>\n");
  fprintf(stream, "<link href=\"../common.css\" rel=\"stylesheet\" type=\"text/css\"/>\n");
  fprintf(stream, "<title>GNUstep: %s</title>\n", products[i]);
  fprintf(stream, "</head>\n");
  fprintf(stream, "<body>\n");
  fprintf(stream, "\n");
  fprintf(stream, "<img src=\"images/disks.png\" alt=\"Disks\"/><h1>GNUstep: %s</h1>", products[i]);
  fprintf(stream, "\n");
  fprintf(stream, "<h3><a name=\"src\">Source</a></h3>\n");

  write_table_start(stream);
  j = 0;
  while(table[j].file[0] != '\0')
    {
      if (strchr(table[j].product, prod_abbrv[i]) != NULL
	  || prod_abbrv[i] == 'A')
	write_source(stream, table[j]);
      j++;
    }
  write_table_end(stream);

  fprintf(stream, "\n");
  fprintf(stream, "<p>RPMs are available in the rpm directory on the ftp\n");
  fprintf(stream, "servers. Look for the source and other packages on\n");
  fprintf(stream, "the main ftp site or <a href=\"sources.html#ftp\">mirrors</a></p>\n");

#if 0

  fprintf(stream, "<h3><a href=\"%s/rpms/srpms\" name=\"srpm\">Source RPMs</a></h3>\n", GFTP);
#if 0
  fprintf(stream, "\n<ul>\n");
  j = 0;
  while(table[j].file[0] != '\0')
    {
      if (strchr(table[j].product, prod_abbrv[i]) != NULL
	  || prod_abbrv[i] == 'A')
	write_srpm(stream, table[j]);
      j++;
    }
  fprintf(stream, "</ul>\n");
#endif

  fprintf(stream, "<p>\n\n");
  fprintf(stream, "<h3><a href=\"%s/rpms\" name=\"rpm\">RPMs</a></h3>\n",
	  GFTP);
  fprintf(stream, "\n<ul>\n");
  k = 0;
  while (archs[k])
    {
      fprintf(stream, "<h3><a href=\"%s/rpms/%s\">%s</a></h3>\n", GFTP, 
      		archs[k], archs[k]);
#if 0
      j = 0;
      while(table[j].file[0] != '\0')
	{
	  if (strchr(table[j].product, prod_abbrv[i]) != NULL
	      || prod_abbrv[i] == 'A')
	    write_rpm_arch(stream, archs[k], table[j]);
	  j++;
	}
#endif
      fprintf(stream, "<p>\n");
      k++;
    }
  fprintf(stream, "</ul>\n");
#endif

  post = fopen("source_post.html", "r");
  while (!feof(post))
    {
      char buffer[200];
      fgets(buffer, 200, post);
      if (feof(post))
	break;
      fputs(buffer, stream);
    }
  fclose(post);

  fclose(stream);
  return 0;
}

int
main(int argc, char *argv[])
{
  int i;
  i = 0;
  read_table();
  while (products[i])
    {
      write_file(i);
      i++;
    }
  return 0;
}  

