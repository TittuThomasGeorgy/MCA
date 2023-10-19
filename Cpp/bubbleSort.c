#include <stdio.h>

void sort(int a[], int n)
{
  int tmp;
  for (int i = 0; i < n; i++)
  {
    for (int j = 0; j < n - i - 1; j++)
    {
      if (a[j] > a[j + 1])
      {
        tmp = a[j];
        a[j] = a[j + 1];
        a[j + 1] = tmp;
      }
    }
  }
}

int main()
{
  int a[50], n;
  printf("Enter size of array:");
  scanf("%d", &n);

  for (int i = 0; i < n; i++)
  {
    printf("Enter array element at %d:", i);
    scanf("%d", &a[i]);
  }

  printf("\n \n Array elements before sorting: \n");
  for (int i = 0; i < n; i++)
  {
    printf("%d ,", a[i]);
  }

  sort(a, n);

  printf("\n \n Array elements after sorting: \n");
  for (int i = 0; i < n; i++)
  {
    printf("%d ,", a[i]);
  }
  getch();
  return 0;
}
