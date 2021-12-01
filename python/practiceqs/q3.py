def check(numbers):
    print("given list:",numbers)

    numx=numbers[0]
    numy=numbers[-1]

    if numx==numy:
        return True

    else :
        return False

a=[10,20,30,40,50,60]
print("result is",check(a))
b=[40,50,60,70,80,40]
print("result is",check(b))