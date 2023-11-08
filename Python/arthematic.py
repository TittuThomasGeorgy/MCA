
a=int(input("Enter Num a: "))
b=int(input("Enter Num b: "))

ch=input(" 1.Addition \n 2.Sub \n 3.Multi \n 4.Div \n Enter ch: ")
if ch=='1':
    print(' a + b = ',a+b)
elif ch=='2':
    print(' a - b = ',a-b)
elif ch=='3':
    print(' a * b = ',a*b)
elif ch=='4':
    print(' a / b = ',a/b)
else:
    print(' Invalid Choice')