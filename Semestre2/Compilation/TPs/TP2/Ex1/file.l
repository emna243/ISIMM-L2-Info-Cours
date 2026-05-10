%{
%}
%option noyywrap
%%
[A-Za-z][A-Za-z0-9]* printf("[");ECHO;printf("]");
%%
int main(void) {
yylex() ;
return 0;
}
