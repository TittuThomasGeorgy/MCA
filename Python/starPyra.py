n=int(input("Enter no. of steps: "))

for i in range(1,int((n+1)/2)):
    for j in range(1,i+1):
        print('*',end=' ')
    print(' ')
for i in range(int((n+1)/2),0,-1):
    for j in range(1,i+1):
        print('*',end=' ')
    print(' ')