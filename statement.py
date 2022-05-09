import random

statement = [random.randint(1, 10) for _ in range(10)]
print(statement)

for v in statement:
    if v < 7:
        break
    elif v % 2 == 0:
        continue
    print(v)    
