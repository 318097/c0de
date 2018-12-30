#include<stdio.h>
#include<string.h>
void main(){
	int n;
	printf("Enter the no of names:");
	scanf("%d",&n);
	
	char names[n][10];
	for(int i=0;i<n;i++){
		printf("Enter name %d:",i+1);
		scanf("%s",names[i]);
	}
	for(int i=0;i<n;i++){
		printf("\n%s",names[i]);
	}
	
	printf("\n\n");
	
	for(int i=0;i<n;i++){
		int j=0;
		while(names[i][j]!='\0' && j<strlen(names[i])){
			printf("%c",names[i][j]);
			j+=2;
		}
		printf(" ");
		
		j=1;
		while(names[i][j]!='\0' && j<strlen(names[i])){
			printf("%c",names[i][j]);
			j+=2;
		}
		printf("\n");
	}
}
