import javax.swing.JFrame;

class GUI extends JFrame {

	public static void main(String[] args){
		GUI gui = new GUI();
		gui.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		gui.setSize(500, 500);
		gui.setVisible(true);
		gui.setTitle("Test Window");
	}
}