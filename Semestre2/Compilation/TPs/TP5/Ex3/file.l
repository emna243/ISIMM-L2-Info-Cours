/* file.l */
%{
#include "file.tab.h"
#include <stdlib.h>
extern int yylval;
%}
%option noyywrap
%%
"la souris"       return S;
"le chat"         return C;
"mange"           return MG;
"attrape"         return AT;
%%
