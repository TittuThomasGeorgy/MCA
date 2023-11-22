def fibno(n):
    if n<0:
        print('Invalid input')
    elif n==0:
        return  0
    elif n==1:
        return  1
    else:
       return fibno(n-2)+fibno(n-1)

count=int(input("Enter N: "))
for i in range(0,count):
    print(fibno(i))