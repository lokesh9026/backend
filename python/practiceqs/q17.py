sample_dict = {
"name": "Kelly",
"age": 25,
"salary": 8000,
"city": "New york"}

keys=["name","salary"]

new={l: sample_dict[l] for l in keys}
print(new)