/* file.l */
%{
#include "file.tab.h"
#include <stdlib.h>
extern int yylval;
%}
%option noyywrap
%%
"("       return OPEN;
")"       return CLOSE;
%%
