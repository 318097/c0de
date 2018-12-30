#include<stdio.h>
int main(){
	int n;
	printf("Enter the number of strings:\n");
	scanf("%d",&n);
	char names[n][20];
	for(int i=0;i<=n;i++){
		printf("Enter %d th name:",i);
		scanf("%s",names[i][0]);
	}
	for(int i=0;i<=n;i++){
		printf("%d th name %s:",i,names[i][0]);
	}
}
