/* fichier file.y */
%{
#include <stdio.h>

int yylex(void);
int yyerror(char *s);
%}
%token S C MG AT
%%
Seq: C MG S | S AT C  ;
%%
int main(void)
{
    return yyparse();
}
int yyerror(char *s)
{
    fprintf(stderr, "erreur de syntaxe: %s\n", s);
    return 1;
}
