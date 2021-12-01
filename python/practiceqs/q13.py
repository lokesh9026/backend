lst1 = ["a", "b", ["c", ["d", "e", ["f", "g"], "k"], "l"], "m", "n"]
sub_list = ["h", "i", "j"]

for k in sub_list:
    lst1[2][1][2].append(k)
print(lst1)