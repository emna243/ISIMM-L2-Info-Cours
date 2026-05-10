/* fichier file.y */
%{
#include <stdio.h>

int yylex(void);
int yyerror(char *s);
%}
%token A B PV RL
%%
SeqAB: SeqA SeqB PV RL | ;
SeqA: A SeqA | ;
SeqB: B SeqB | ;
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
