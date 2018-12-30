#include <stdio.h>

int main(){
	int tc;
	scanf("%d", &tc);
	for(int i = 1; i <= tc; i++){
        int no;
        scanf("%d", &no);
        int sum = 0;
        
        for(int j = 1; j < no; j++){
            if(j % 3 == 0 || j % 5 == 0){
                sum += j;
            }
        }
        printf("%d",sum);
    }
}