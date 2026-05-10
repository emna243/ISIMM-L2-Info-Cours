/* file.l */
%{
#include "file.tab.h"
#include <stdlib.h>
extern int yylval;
%}
%option noyywrap
%%
"a"        return A;
"b"        return B;
";"        return PV;
\n         return RL;
%%
