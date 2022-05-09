x1 = int(input())
y1 = int(input())
x2 = int(input())
y2 = int(input())

# print(x1+x2,y1+y2)

class Vector():
    def __init__(self, x, y):
        self.x = x
        self.y = y

    def mass(self):
        return (self.x**2+self.y**2)**0.5


def add(v1,v2):
    return Vector(v1.x+v2.x,v1.y+v2.y)
    return v1.x+v2.x,v1.y+v2.y


V1 = Vector(x1, y1)
V2 = Vector(x2, y2)
V3 = add(V1,V2)

print(add(V1, V2))
print(V1.mass())
print(V3.mass())