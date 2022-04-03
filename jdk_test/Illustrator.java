package jdk_test;

import java.util.Scanner;

/**
 * Illustrator
 */
public class Illustrator {

    public static void main(String[] args) {
        Animal a1 = new Animal();
        Scanner sc = new Scanner(System.in);
        
        a1.setName("Iris");
        // a1.SayMyName();
        double w = sc.nextDouble();
        double h = sc.nextDouble();

        a1.setWeight(w);
        a1.setHeight(h);

        System.out.printf("%s Bmi %f \n",a1.getName() ,a1.getBmi());
        sc.close();
    }
}