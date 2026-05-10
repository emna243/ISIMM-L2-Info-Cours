/* fichier file.y */
%{
#include <stdio.h>

int yylex(void);
int yyerror(char *s);
%}
%token OB CB Str KVSep Sep
%%
Json: OB Expr CB;
Expr: Str KVSep Str Sep Expr | Str KVSep Str;
%%
int main(void)
{
    return yyparse();
}
int yyerror(char *s)
{
    fprintf(stderr,"%s\n", s);
    return 1;
}
