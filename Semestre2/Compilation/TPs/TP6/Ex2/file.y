/* fichier file.y */
%{
#include <stdio.h>

int yylex(void);
int yyerror(char *s);
%}
%token OPEN CLOSE
%%
Seq: Seq Seq | OPEN Seq CLOSE | ;
%%
int main(void)
{
    return yyparse();
}
int yyerror(char *s)
{
    fprintf(stderr,"%s", s);
    return 1;
}
