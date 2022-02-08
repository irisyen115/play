a = 1000
b = a
print(id(a), id(b), id(a) == id(b))
a = 1001
print(id(a), id(b))
