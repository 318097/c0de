#include < stdio.h >
#include < stdbool.h >
    int main(){
    int n, m;
    scanf("%d %d", & n, & m);
    int arr[n][m];
    int count = 0;
    for (int i = 0; i < n; i++) {
        for (int j = 0; j < m; j++) {
            scanf("%d", & arr[i][j]);
        }
    }
    if (n >= 8 && m >= 8) {
        for (int i = 0; i <= n - 8; i++) {
            for (int j = 0; j <= m - 8; j++) {
                bool flag = true;
                for (int x = i; x < i + 7; x++) {
                    for (int y = j; y < j + 7; y++) {
                        if (arr[x][y] == arr[x][y + 1] || arr[x][y] == arr[x + 1][y]) {
                            flag = false;
                        }
                    }
                }
                if (flag) {
                    count++;
                }
            }
        }
    }
    printf("%d", count);
}
