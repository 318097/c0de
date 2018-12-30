#include<stdio.h>
#include<math.h>
#include<string.h>
int main()
{
    char str[10],rev[10];
    int n,count=0,i,j,a;

    printf("Enter the String:\n");
    scanf("%s",str);
    n=strlen(str);
    printf("Length:%d\n",n);
    for(i=0;i<n;i++)
        printf("str[%i]::%c\n",i,str[i]);

    i=0;
    j=n-1;
    while(i<=n-1 && j>=0)
    {
        rev[i]=str[j];
        i++;
        j--;
    }
    rev[n]='/0';

    printf("Reverse string is:%s",rev);
    for(a=0;a<=n-1;a++)
        if(str[a]!=rev[a])
            count++;

    printf("\nThe no of insertions required are:%d",count);
}
