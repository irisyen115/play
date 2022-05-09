x1 = int(input())
y1 = int(input())
x2 = int(input())
y2 = int(input())

def gcd(a,b):
    if a<b:
        return gcd(b,a)
    if a%b==0:
        return b
    return gcd(b,a%b)

class Fraction():
    def __init__(self, x , y):
        self.x = x
        self.y = y

    def reduction(self):
        g = gcd(self.x,self.y)
        self.x = self.x//g
        self.y = self.y//g

    def __str__(self):
        return f'{self.x}/{self.y}'

def add(f1, f2):
    return Fraction((f1.x*f2.y+f2.x*f1.y), f1.y*f2.y)

F1 = Fraction(x1,y1)
F2 = Fraction(x2,y2)
F3 = add(F1,F2)
F3.reduction()

print(F3)
