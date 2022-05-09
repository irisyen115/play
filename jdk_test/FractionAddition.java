package jdk_test;

import java.util.Scanner;

class Fraction {
    private int son;
    private int mom;

    public Fraction(int s, int m)
    throws Exception {
        son = s;
        mom = m;
        if (m == 0) {
            String error = String.format("invalid fraction %d / %d", s, m);
            throw new Exception(error);
        }
    }

    public int GetSon() {
        return son;
    }

    public int GetMom() {
        return mom;
    }

    public void Reduct() {
        int g = gcd(son, mom);
        son = son / g;
        mom = mom / g;
    }

    public void Dump() {
        System.out.print(son + "/" + mom +"\n");
    }

    static int gcd(int a, int b) {
        if (a % b == 0) {
            return b;
        }
    
        return gcd(b, a % b);
    }

}

public class FractionAddition {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        Fraction f1,f2;
        try {
            int a = sc.nextInt();
            int b = sc.nextInt();
            f1 = new Fraction(a, b);
            f1.Dump();

            int c = sc.nextInt();
            int d = sc.nextInt();
            f2 = new Fraction(c, d);
            f2.Dump();

            Fraction f3 =  addFraction(f1, f2);
            f3.Reduct();
            f3.Dump();
        } catch (Exception e) {
            System.out.println("wrong " + e.getMessage());         
        } finally {
            sc.close();
        }
    }

    public static Fraction addFraction(Fraction a, Fraction b) throws Exception {
        int ason = a.GetSon();a.Dump();
        int amom = a.GetMom();b.Dump();
        int bson = b.GetSon();
        int bmom = b.GetMom();
        return new Fraction(ason*bson,amom*bmom);
    }
    
}
