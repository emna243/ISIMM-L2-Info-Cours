%{
%}
%option noyywrap
%%
[A-Za-z][A-Za-z0-9]* printf("[");ECHO;printf("]");
%%
int main(void) {
char file_in[256], file_out[256];

    
    // Reading the file data using fgets() in the
    // form of a block of size 30 bytes
printf("Fichier source:");
fgets(file_in, sizeof(file_in), stdin);
printf(file_in);
printf("\n");
printf("Fichier resultat:");
fgets(file_out, sizeof(file_out), stdin);
printf(file_out);
printf("\n");

yyin = fopen(file_in,"r");
yyout = fopen(file_out, "w");

yylex() ;

fclose(yyin);
fclose(yyout);
return 0;
}
