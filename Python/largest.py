def operation(num_1,num_2,operator):
	if(operator=='+'):
		return num_1+num_2
	elif(operator=='-'):
		return num_1-num_2
	elif(operator=='*'):
		return num_1*num_2
	elif(operator=='/'):
		return num_1/num_2
	else:
		return 'error'

def init():
	num_1=int(input('enter num1: '))
	operator=input('choose your operator(+,-,*,/): ')
	num_2=int(input('enter num2: '))

	print(num_1,operator,num_2,'=',operation(num_1,num_2, operator))
init()
