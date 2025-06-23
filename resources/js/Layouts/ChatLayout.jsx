 import { usePage } from "@inertiajs/react";
import { use } from "react";
 
 const ChatLayout = ({  children }) => {
    
    const page = usePage();
    const conversations = page.props.conversations;
    const selectConversation = page.props.selectConversation;
    console.log("ChatLayout conversation", conversations);
    console.log("ChatLayout selectConversation", selectConversation);

    return <div>
        ChatLayout
        <div>{children}</div>
    </div>
 }

 export default ChatLayout;