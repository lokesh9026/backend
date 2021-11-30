def check(lst1,lst2):
    result=[]

    for j in lst1:
        if j %2!=0:
            result.append(j)

    for i in lst2:
        if i %2==0:
            result.append(i)
    return result

lst1=[9,20,30,50]
lst2=[80,90,60,70]

print("final",check(lst1,lst2))
