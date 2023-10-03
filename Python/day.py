a=int(input("Enter day : "))

match a:
    case 1: print('Sunday')
    case 2: print('Monday')
    case 3: print('Tuesday')
    case 4: print('Wednesday')
    case 5: print('thursday')
    case 6: print('Friday')
    case 7: print('Satday')
    case _: print('Invalid')
    