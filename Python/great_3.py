a=int(input("Enter Num a: "))
b=int(input("Enter Num b: "))
c=int(input("Enter Num c: "))

if a>=b and a>=c:
  print(a," is greater ")
elif b>=a and b>=c:
  print(b," is greater ")
else:
  print(c," is greater ")