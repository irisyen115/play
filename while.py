i = int(input())
count = 1
while i > 1: 
    if i % 2 == 1:
        i = i * 3 + 1
    else:
        i = i / 2
    print(i)
    count = count + 1
print(count)
# i = 0
# while i < 10:
#     i = i+1
#     print(i)