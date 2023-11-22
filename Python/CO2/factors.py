n=int(input("Enter a no.: "))

for i in range(1,int(n+1)):
    if n%i==0:
        print(i,end=' ')