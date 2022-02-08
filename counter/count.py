import random

bucket = [random.randint(1, 10) for _ in range(100)]
counter = dict()
pos = {}
pos2 = {}
print(bucket)
for i, v in enumerate(bucket):
    # if v in counter:
    #     counter[v] = counter[v]+1 
    # else: 
    #     counter[v] = 1
    counter[v] = counter.get(v,0)+1
    if v not in pos:
        pos[v] = i
    pos2[v] = i
print(counter)
    

# for i, v in enumerate(bucket):
     

print(pos)
print(pos2)
