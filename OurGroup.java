import java.util.Vector;

public class OurGroup {

    private Vector<String> groupMembers;
    public OurGroup()
    {
        groupMembers = new Vector<String>();
        groupMembers.add("Nutnaree Comdenlek"); //PUT YOUR NAME HERE
        groupMembers.add("Potjarin Prasertsri");
        groupMembers.add("Kanyanut Tangcharoen");
        groupMembers.add("");
    }
    public Vector<String> getGroupMembers () {
        return groupMembers;
    }

}
