/* file.l */
%{
#include "file.tab.h"
#include <stdlib.h>
extern int yylval;
%}
%option noyywrap
%%
"{"       return OB;
"}"       return CB;
\"[a-zA-Z0-9]*\"       return Str;
":" return KVSep;
"," return Sep;
[ \n\t]  ;
%%
