%{
%}
%option noyywrap
%%
[a-z]*er ECHO; printf(" : verbe du 1er groupe\n");
[a-z]*ir ECHO; printf(" : verbe du 2eme groupe\n");
.|\n
%%
int main(void) {
yylex() ;
return 0;
}
