class Node
    attr_accessor :next
    attr_reader :data
    def initialize data
        @data = data
        @next = nil
    end
end

class LinkedList
    def initialize
        @head = nil
    end
    def add data
        temp = @head
        @head = Node.new(data)
        @head.next = temp
    end
    def printList
        temp = @head
        while temp
            puts temp.data
            temp = temp.next
        end
    end
end

list = LinkedList.new
list.add(1)
list.add(2)
list.add(3)


list.printList
