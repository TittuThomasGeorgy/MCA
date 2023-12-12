class time:
    def __init__(self, hour, minute):
        self.hour = hour
        self.minute = minute
    def __add__(self, other):
        self.hour=self.hour+other.hour
        self.minute=self.minute+other.minute
        if(self.minute>=60):
            self.hour=self.hour+(self.minute/60)
            self.minute%=60
    def display(self):
        print('hour:',int(self.hour), "min:",self.minute)
l1=int(input("enter 1st hour: "))
b1=int(input("enter 1st minute: "))    
r1=time(l1,b1) 

l2=int(input("enter 2nd  hour : "))
b2=int(input("enter  2nd minute: "))    
r2=time(l2,b2) 

r1+r2
r1.display()