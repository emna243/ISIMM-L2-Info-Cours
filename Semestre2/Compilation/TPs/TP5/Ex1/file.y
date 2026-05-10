/* fichier file.y */
%{
#include <stdio.h>

int yylex(void);
int yyerror(char *s);
%}
%token NOMBRE
%%
expression: expression '+' terme
| expression '-' terme
| terme
;
terme: terme '*' facteur
| terme '/' facteur
| facteur
;
facteur: '(' expression ')'
| '-' facteur
| NOMBRE
;
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
