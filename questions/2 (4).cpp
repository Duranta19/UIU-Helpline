#include <iostream>
#include <algorithm>

using namespace std;

int n;
int p[1001];
int r[1001];


int maximizedIncome(int n)
{
    if (n == 0)
        {
          return 0;
        }
    int q = p[n];
    for (int i = 1; i <= n/2; i++)
        {
            q = max(q, maximizedIncome(i) + maximizedIncome(n-i));
        }
    return q;
}

int maxIncome(int n) {
    r[0] = 0;
    for (int i = 1; i <= n; i++)
        {
          int q = p[i];
          for (int j = 1; j <= i/2; j++)
            {
               q = max(q, r[j] + r[i-j]);
            }
        r[i] = q;
        }
    return r[n];
}

int main() {
    cout << "How many pieces?" << endl;
    cin >> n;

     cout << "Enter the price: " << endl;
    for (int i = 1; i <= n; i++) {
        cin >> p[i];
    }

    cout << "income: " << maximizedIncome(n) << " taka" << endl;
    return 0;
}
