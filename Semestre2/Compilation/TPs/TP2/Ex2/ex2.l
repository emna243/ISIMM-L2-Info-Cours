%{
%}
%option noyywrap
%%
[a-z]*er { printf(" : verbe du 1er groupe\n",yytext); }
[a-z]*ir { printf(" : verbe du 2eme groupe\n",yytext);}
.|\n
%%
int main(void) {
yylex() ;
return 0;
}
