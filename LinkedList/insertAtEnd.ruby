class Node
    attr_accessor :next
    attr_reader :data
    def initialize data
        @data = data
        @next = nil
    end
end

class LinkedList
    attr_accessor :head
    def initialize
        @head = nil
    end
    def printList
        temp = @head
        while temp
            puts temp.data
            temp = temp.next
        end
    end
    def addAtEnd data
        node = @head
        while node.next != nil
            node = node.next
        end
        node.next = Node.new(data)
    end
end


list = LinkedList.new

#initialize head
list.head = Node.new(0)


list.addAtEnd 1
list.addAtEnd 2
list.addAtEnd 3

list.printList
