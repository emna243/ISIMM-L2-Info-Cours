%{
#include <stdio.h>
void echo(char *type, char *token){
    printf("%s:%s\n",type,token);
    return;
}
%}
%option noyywrap
keyword for|while|if|else
operator \+|\-|\*|\/
comparator >|<
sep \(|\)|\[|\]|\{|\}
numeric [0-9]*\.?[0-9]+
identificator [a-zA-Z][a-zA-Z0-9]*
%%
{keyword} echo("KeyWord",yytext);
{operator} echo("Operator",yytext);
{comparator} echo("Comparator",yytext);
{sep} echo("Sep",yytext);
{numeric} echo("Numeric",yytext);
{identificator} echo("Identificator",yytext);
.|\n
%%
int main(void) {
yylex() ;
return 0;
}
