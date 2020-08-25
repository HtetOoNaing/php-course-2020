for i in range(100) :
    if(i < 3) : 
        print(i)
        continue
    first = i % 3 == 0
    second = i % 5 == 0
    third = i % 15 == 0
    if(first) : print('A')
    if(second) : print('B')
    if(third) : print('C')
    if(not first and not second and not third) : 
        print (i)