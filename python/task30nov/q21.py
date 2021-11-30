def new(s1,s2):

    m=len(s1)
    mi=int(m/2)
    x=s1[:mi:]

    x=x+s2
    x=x+s1[mi:]
print(x)