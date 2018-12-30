//Caesar's Encryption=substitute each letter by letter with 3 advanced Ascii value
#include<stdio.h>
#include<math.h>
#include<ctype.h>

int main()
{
    char str[100];
    int toInt[100];
    char enc[100];
    char dec[100];

    int i,len,ch;

            //Encryption
            puts("Enter String to Encrypt:");
            gets(str);
            len=strlen(str);
            for(i=0;i<len;i++)
            {
                toInt[i]=str[i];
                enc[i]=toInt[i]+3;
            }
            for(i=0;i<len;i++)
            printf("%c",enc[i]);


            //Decryption
            puts("Enter String to Decrypt:");
            gets(str);
            len=strlen(str);
            for(i=0;i<len;i++)
            {
                toInt[i]=str[i];
                dec[i]=toInt[i]-3;
            }
            for(i=0;i<len;i++)
            printf("%c",dec[i]);


}
