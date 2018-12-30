class Demo{
		int a=10;
		public int b=20;
		protected int c=30;
		private int d=40;
		void getData(){
			System.out.println(a);
			System.out.println(b);
			System.out.println(c);
			System.out.println(d);
		}
}

class ProtectedTest{
	public static void main(String args[]){
		Demo d=new Demo();
		d.getData();
	}
}
