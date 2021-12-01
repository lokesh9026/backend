def ml(l1, l2):
    result_list = []
    
    for num in l1:
        
        if num % 2 != 0:
            result_list.append(num)
    
    for num in l2:
        
        if num % 2 == 0:
        
            result_list.append(num)
    return result_list

l1 = [10, 20, 25, 30, 35]
l2 = [40, 45, 60, 75, 90]
print("final:", ml(l1, l2))

