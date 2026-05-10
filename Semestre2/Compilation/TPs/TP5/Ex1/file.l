/* file.l */
%{
#include "file.tab.h"
#include <stdlib.h>
extern int yylval;
%}
%option noyywrap
%%
[0-9]+  { return NOMBRE; }
[ \t]   ;
\n      return 0;
.       return yytext[0];
%%
