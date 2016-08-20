class Foo{
	public Foo(){
		System.out.println("In Foo");
	}

	public void bark(){
		System.out.println("Hoof");
	}
}

public class Test extends Foo{
	public Test(){
		System.out.println("In TEst");
	}

	public void bark(){
		System.out.println("Woof");
	}

	public static void main(String[] args){
		Foo f = new Foo();
		Foo t = new Test();
		t.bark();
	}
}